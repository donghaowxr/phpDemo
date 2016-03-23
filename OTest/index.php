<?php
/**
 * Created by PhpStorm.
 * User: donghao
 * Date: 16/3/23
 * Time: 21:40
 */
class tv {
    private $shengYin;
    function __construct(){
        $this->shengYin=20;
    }
    public function yaoKongQi($anNiu,$liang=0){
        switch($anNiu){
            case "shengyin":
                $this->shengYin($liang);
                break;
            case "guanji":
                $this->guanDianShi();
                break;
            case "huantai":
                $this->huanTai($liang);
                break;
            case "jingyin":
                $this->jingYin($liang);
                break;
        }
    }
    private function shengYin($daXiao){
        if($daXiao>0){
            echo "声音增大{$daXiao}个，现在声音是:".intval($this->shengYin+$daXiao);
        }else{
            echo "声音减少{$daXiao}个，现在声音是:".intval($this->shengYin+$daXiao);
        }
    }
    private function guanDianShi(){
        echo "关电视";
    }
    private function huanTai($pinDao){
        echo "现在是第{$pinDao}频道";
    }
    private function jingYin($zhuangTai){
        $jingYin=$zhuangTai==1?"电视静音":"打开声音";
        echo $jingYin;
    }
}

$tv1=new tv();
$tv1->yaoKongQi("shengyin",6);
?>