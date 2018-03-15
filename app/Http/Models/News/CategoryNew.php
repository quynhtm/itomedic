<?php
/**
 * QuynhTM
 */
namespace App\Http\Models\News;
use App\Http\Models\BaseModel;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use App\library\AdminFunction\Define;
use App\Library\AdminFunction\FunctionLib;

class CategoryNew extends BaseModel
{
    protected $table = Define::TABLE_WEB_CATEGORY;
    protected $primaryKey = 'category_id';
    public $timestamps = false;

    protected $fillable = array('category_name', 'category_parent_id', 'category_depart_id', 'category_type', 'category_level',
        'category_image_background', 'category_icons','category_status','category_menu_status'
    ,'category_menu_right','category_order');

    public static function createItem($data){
        try {
            DB::connection()->getPdo()->beginTransaction();
            $checkData = new CategoryNew();
            $fieldInput = $checkData->checkField($data);
            $item = new CategoryNew();
            if (is_array($fieldInput) && count($fieldInput) > 0) {
                foreach ($fieldInput as $k => $v) {
                    $item->$k = $v;
                }
            }
            $item->save();

            DB::connection()->getPdo()->commit();
            self::removeCache($item->category_id,$item);
            return $item->category_id;
        } catch (PDOException $e) {
            DB::connection()->getPdo()->rollBack();
            throw new PDOException();
        }
    }

    public static function updateItem($id,$data){
        try {
            DB::connection()->getPdo()->beginTransaction();
            $checkData = new CategoryNew();
            $fieldInput = $checkData->checkField($data);
            $item = CategoryNew::find($id);
            foreach ($fieldInput as $k => $v) {
                $item->$k = $v;
            }
            $item->update();
            DB::connection()->getPdo()->commit();
            self::removeCache($item->category_id,$item);
            return true;
        } catch (PDOException $e) {
            //var_dump($e->getMessage());
            DB::connection()->getPdo()->rollBack();
            throw new PDOException();
        }
    }

    public function checkField($dataInput) {
        $fields = $this->fillable;
        $dataDB = array();
        if(!empty($fields)) {
            foreach($fields as $field) {
                if(isset($dataInput[$field])) {
                    $dataDB[$field] = $dataInput[$field];
                }
            }
        }
        return $dataDB;
    }

    public static function deleteItem($id){
        if($id <= 0) return false;
        try {
            DB::connection()->getPdo()->beginTransaction();
            $item = CategoryNew::find($id);
            if($item){
                $item->delete();
            }
            DB::connection()->getPdo()->commit();
            self::removeCache($item->category_id,$item);
            return true;
        } catch (PDOException $e) {
            DB::connection()->getPdo()->rollBack();
            throw new PDOException();
            return false;
        }
    }

    public static function removeCache($id = 0,$data){
        if($id > 0){
            //Cache::forget(Define::CACHE_CATEGORY_ID.$id);
        }
    }

    public static function searchByCondition($dataSearch = array(), $limit =0, $offset=0, &$total){
        try{
            $query = CategoryNew::where('category_id','>',0);
            if (isset($dataSearch['category_name']) && $dataSearch['category_name'] != '') {
                $query->where('category_name','LIKE', '%' . $dataSearch['category_name'] . '%');
            }
            if (isset($dataSearch['category_type']) && $dataSearch['category_type'] >0) {
                $query->where('category_type', $dataSearch['category_type'] );
            }
            if (isset($dataSearch['category_order']) && $dataSearch['category_order'] != '') {
                $query->where('category_order','LIKE', '%' . $dataSearch['category_order'] . '%');
            }
            if (isset($dataSearch['category_status']) && $dataSearch['category_status'] != -1) {
                $query->where('category_status',$dataSearch['category_status'] );
            }
            $total = $query->count();
            $query->orderBy('category_type', 'ASC');

            //get field can lay du lieu
            $fields = (isset($dataSearch['field_get']) && trim($dataSearch['field_get']) != '') ? explode(',',trim($dataSearch['field_get'])): array();
            if(!empty($fields)){
                $result = $query->take($limit)->skip($offset)->get($fields);
            }else{
                $result = $query->take($limit)->skip($offset)->get();
            }
            return $result;

        }catch (PDOException $e){
            throw new PDOException();
        }
    }
}
