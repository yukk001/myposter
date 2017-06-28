<?php
namespace Center\Admin\Controllers;

use Phalcon\Logger\Adapter\File as FileAdapter;
use Center\library\Lunar;

class BgimageController extends AdminBaseController
{
    private $timelimit = 3600;

    public function cronAction(){

        for($i=0;$i<=10;$i++){
//            $result_arr = $this->initDataAction();
            sleep($this->timelimit);// 间隔时间

        }
        ob_flush();
        flush();

    }

    public function indexAction(){

        $txt_arr = array(
            '20170619'=>array(
                'englishwords' => '',
                'words'=>'“活着，有时真的会变得很不真实。”',
                'name'=>'六人晚餐',
                'release'=>'2017.6.16上映',
                'imageurl'=>'image/centerimage/20170619.jpg',
            ),
            '20170620'=>array(
                'englishwords' => '',
                'words'=>'“拍摄过程也是我对电影的一种朝圣。”',
                'name'=>'冈仁波齐',
                'release'=>'2017年6月20日上映',
                'imageurl'=>'image/centerimage/20170620.jpg',
            ),
            '20170621'=>array(
                'englishwords' => '',
                'words'=>'“真実はいつも一つ！”-eq“真相只有一个！”',
                'name'=>'《名侦探柯南》原作 青山刚昌',
                'release'=>'出生日期：1963-06-21',
                'imageurl'=>'image/centerimage/20170621.jpg',
            ),
            '20170622'=>array(
                'englishwords' => '',
                'words'=>'“就算是一条内裤，一张卫生纸都有它的用处。”',
                'name'=>'周星驰',
                'release'=>'出生日期：1962-06-22',
                'imageurl'=>'image/centerimage/20170622.jpg',
            ),
            '20170623'=>array(
                'englishwords' => '“Life was like a box of chocolates, -eq you never know what you are going to get.”',
                'words'=>'“生命就像一盒巧克力，结果往往出人意料。”',
                'name'=>'《阿甘正传》',
                'release'=>'1994年6月23日洛杉矶首映',
                'imageurl'=>'image/centerimage/20170623.jpg',
            ),
            '20170624'=>array(
                'englishwords' => '“Fate rarely calls upon us at a moment of our choosing.”',
                'words'=>'“使命什么时候到来，并不取决于我们。”',
                'name'=>'《变形金刚2》',
                'release'=>'2009年6.24日内地上映',
                'imageurl'=>'image/centerimage/20170624.jpg',
            ),
            '20170625'=>array(
                'englishwords' => '“If you wanna make the world a better palce , -eq take a look at yourself and then make a change.”',
                'words'=>'“如果你想这个世界变得更美好，”-eq“那么，先审视自己，然后做出改变。”',
                'name'=>'迈克尔·杰克逊',
                'release'=>'2009年6月25日逝世',
                'imageurl'=>'image/centerimage/20170625.jpg',
            ),
            '20170626'=>array(
                'englishwords' => '“It is not our abilities decide what we truly are, -eq but choices”',
                'words'=>'“决定我们是什么样的人的不是我们的能力，-eq 而是我们的选择。”',
                'name'=>'《哈利波特─神秘的魔法石》',
                'release'=>'1997年6月26日出版',
                'imageurl'=>'image/centerimage/20170626.jpg',
            ),
        );

        $count = 0;

        foreach($txt_arr as $key => $value){
            if(!file_exists($value['imageurl'])){
                file_put_contents('bgimage.log',$key.'nocenterpage'.PHP_EOL,FILE_APPEND);
                continue;
            }
            else
            {
                $add_result =  $this->imageupload($key,$value['name'],$value['release'],$value['imageurl'],$value['words'],$value['englishwords']);
                if($add_result){
                    $count++;
                }
                else
                {
                    file_put_contents('bgimage.log',$key.'addfail'.PHP_EOL,FILE_APPEND);
                }
            }
        }

        echo 'done';

    }

    public function imageupload($filekey='',$name='',$release='',$imageurl='',$words='',$englishwords = ''){
        $second = '.jpg';
        $lastname = $imageurl;
        try{
                $datestr = $this->getDateStr($filekey);
                $img = new \Imagick;
                $img->readImage('image/constellation'.$datestr['constellation'].'.png');
                $pic = new \Imagick;
                $pic->readImage($lastname);
                $pic->cropImage(599, 727, 0, 0);
                $pic->roundCorners(10, 10);
                $draw = $this->getdraw('fonts/fzlthjw.ttf', 28, '#000000', \Imagick::ALIGN_LEFT);
                $draw->annotation(141,121, $datestr['str_conste']);
                $draw->annotation(55,160,  $datestr['str_date']);
                $draw->annotation(415,121, $datestr['str_chinayear']);
                $draw->annotation(415,160, $datestr['str_chinaday']);
                $drawmid = $this->getdraw('fonts/fzlthjw.ttf', 150, '#c85042', \Imagick::ALIGN_CENTER);
                $drawmid->annotation(320,165, $datestr['str_middle']);
                $img->drawImage($draw);
                $img->drawImage($drawmid);
                $draw = $this->getdraw('fonts/fzlthjw.ttf', 28, '#000000', \Imagick::ALIGN_RIGHT);
                $text_font = $name;//右下角文字  标题
                // 添加文字
                $draw->annotation(620, 1004, $text_font);
                $draw_des = $this->getdraw('fonts/AdobeHeitiStd-Regular.otf', 24, '#000000', \Imagick::ALIGN_RIGHT);
                $text_des = $release;//右下角文字  内容
                $draw_des->annotation(620, 1044, $text_des);
                // 将图片合并到画布
                $img->compositeImage($pic, \Imagick::COMPOSITE_OVER, 20, (154 + 73));
                $text_english = '';
                $draw_english = $this->getdraw('fonts/msyh.ttf', 22, '#ffffff', \Imagick::ALIGN_CENTER);
                $draw_english->annotation(300, 852, $text_english);
                $img->drawImage($draw);
                $img->drawImage($draw_des);
                $img->drawImage($draw_english);
                // 保存图片到目录
                $file_name ='bg'.$filekey;

                if (is_dir('./image/template/')) {
                    $img->writeimage('image/template/' .$file_name. $second);
                } else {
                    mkdir('image/template/');
                    $img->writeimage('image/template/'  .$file_name . $second);
                }


                $arr_bgimage = array(
                    'englishwords' => $englishwords,
                    'words' =>$words,
                    'name'=>$name,
                    'release' => $release,
                    'bgtime'=>$filekey,
                    'nativeimage'=>$lastname,
                    'bgimageurl'=> 'image/template/' . $file_name .$second,
                    'weights'=> 0,
                );

                $db = $this->loadMiniDb();
                $query = "SELECT * FROM `mini_bgimage` where bgtime = '{$filekey}' LIMIT 1";
                $issave = $db->get_one($query);

                if($issave){
                    $add_result = $db->update('mini_bgimage',$arr_bgimage,'bgtime = '.$filekey);
                }else{
                    $add_result =  $db->insert('mini_bgimage',$arr_bgimage);
                }

                if($add_result){
                    return true;
                }
                else
                {
                    return false;
                }


        }
        catch (\Exception $e)
        {
            return false;
        }
    }

    private function getDateStr($filekey=''){

        include_once APP_PATH.'/apps/library/Lunar.php';
        $base_arr = array(
            1 => "水瓶座",
            2 => "双鱼座",
            3 => "白羊座",
            4 => "金牛座",
            5 => "双子座",
            6 => "巨蟹座",
            7 => "狮子座",
            8 => "处女座",
            9 => "天秤座",
            10 => "天蝎座",
            11 => "射手座",
            12 => "摩羯座"
        );

        $lunar=new Lunar();
        if($filekey){
            $today = date('Y-m-d',strtotime($filekey));
        }
        else
        {
            $today = date('Y-m-d',time());
        }
        $arr_time = explode('-',$today);
        $chinadate = $lunar->convertSolarToLunar($arr_time[0], $arr_time[1],$arr_time[2] );
        $constellation = $lunar->constellation($arr_time[1],$arr_time[2]);

        $str_conste =$base_arr[$constellation];//星座
        $str_date = $today;//阳历
        $str_chinayear =$chinadate[3].'年';//阴历年份
        $str_chinaday = $chinadate[1].$chinadate[2];//阴历日期

        $str_middle = $arr_time[2];//中间大号的日期

        $result = array(
            'str_conste'=>$str_conste,
            'str_date'=>$str_date,
            'str_chinayear'=>$str_chinayear,
            'str_chinaday'=>$str_chinaday,
            'str_middle'=>$str_middle,
            'constellation'=>$constellation,
        );
        return $result;
    }

    public function getdraw($setFont = 'fonts/st.ttf', $setFontSize = 20, $setFillColor = '#000000', $setTextAlignment = \Imagick::ALIGN_LEFT)
    {
        $draw_obj = new \ImagickDraw;
        $draw_obj->setFont($setFont);
        // 文字大小
        $draw_obj->setFontSize($setFontSize);
        // 文字颜色
        $draw_obj->setFillColor(new \ImagickPixel($setFillColor));
        // 文字对齐方式
        $draw_obj->setTextAlignment($setTextAlignment);
        return $draw_obj;

    }



}