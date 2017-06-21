<?php
namespace app\apis;
header("Content-type:text/html;charset=utf-8");
class ImagehandleApi extends CommonApi{


    public function index(){

        $result = array(
            'statu' => '500',
            'msg' => 'error'
        );
        $des_post = isset($_POST['description']) ? $_POST['description'] : '';
        $isprivate = isset($_POST['isprivate']) ? $_POST['isprivate'] : '';
        if ($des_post)
        {
            $arr_des = array();
            for ($i = 0;$i<(strlen($des_post)/9);$i++)
            {
                $arr_des[$i] = mb_substr($des_post, $i*9, 9, 'UTF-8');
            }
        }

        if (!$_POST['username']) {
            $result['statu'] = '403';
            $result['msg'] = 'your username is null';
            echo json_encode($result);
            die;
        } else {
            $username = $_POST['username'];
        }

        if (!$_FILES['weixinTest']['name']) {
            $result['statu'] = '401';
            $result['msg'] = 'file upload fail';
            echo json_encode($result);
            die;
        }
        $imgname = explode('.', $_FILES['weixinTest']['name']);
        $firstname = $imgname[0];
        $second = $imgname[1];
        $tmp = $_FILES['weixinTest']['tmp_name'];
        $lastname = 'upload/images/'.$username . '_' . $firstname . '.' . $second;
        try{
            if (move_uploaded_file($tmp, $lastname)) {
                $img = new \Imagick;
                $img->readImage('upload/template.jpg');
                $pic = new \Imagick;
                $pic->readImage($lastname);
                $pic->cropImage(599, 727, 0, 0);
                $pic->roundCorners(10, 10);
                $icon = new \Imagick;
                $icon->readImage('upload/date.png');
                $icon_height = $icon->getImageHeight();
                $img->compositeImage($icon, \Imagick::COMPOSITE_OVER, 20, 44);
                // 初始化图片对象
                $twidth = 580;
                // 文本图片的高
                $theight = 141;
                $text = new \Imagick;
                // 初始化绘制对象
                $draw = $this->getdraw('fonts/st.ttf', 40, '#000000', \Imagick::ALIGN_LEFT);
                $text_font = '《速度与激情5》';
                $draw_txt = $text->queryFontMetrics($draw, $text_font);
                // 添加文字
                $draw->annotation(($twidth - $draw_txt['textWidth'] - 20), ($icon_height + 850), $text_font);

                $draw_des = $this->getdraw('fonts/st.ttf', 20, '#000000', \Imagick::ALIGN_LEFT);

                $text_des = '中国内地上映日期：2011-05-12';
                $drawdes_txt = $text->queryFontMetrics($draw_des, $text_des);

                $draw_des->annotation(($twidth - $drawdes_txt['textWidth'] - 20), ($icon_height + 890), $text_des);

                // 将图片合并到画布
                $img->compositeImage($pic, \Imagick::COMPOSITE_OVER, 20, ($icon_height + 73));
                if ($arr_des) {
                    $draw_post = $this->getdraw('fonts/st.ttf', 20, '#ffffff', \Imagick::ALIGN_CENTER);
                    $count = sizeof($arr_des);
                    if ($count > 3) {
                        $count = 3;
                    }
                    for ($num = 0; $num < $count; $num++) {
                        $drawdes_txt = $text->queryFontMetrics($draw_post, $arr_des[$num]);
                        $img->annotateImage($draw_post, 300, ($icon_height + 690 + ($num * 30)), 0, $arr_des[$num]);
                    }
                }
                $img->drawImage($draw);
                $img->drawImage($draw_des);
                // 保存图片到目录
                if (is_dir('./images/' . $username . '/')) {
                    $img->writeimage('upload/images/' . $username . '/'  . $username . '_' . $firstname . '.' . $second);
                } else {
                     mkdir('upload/images/' . $username . '/');

                    $img->writeimage('upload/images/' . $username . '/'  . $username . '_' . $firstname . '.' . $second);
                }
                @unlink($lastname);

                $my_image = array(
                    'user_id'=>$username,
                    'create_time' => time(),
                    'image_url'=> 'upload/images/' . $username . '/'  . $username . '_' . $firstname . '.' . $second,
                    'is_private'=> $isprivate,
                );

                $result['statu'] = '200';
                $result['msg'] = 'OK';
                echo json_encode($result);
                die;
            } else {
                $result['statu'] = '501';
                $result['msg'] = 'file upload fail';
                echo json_encode($result);
                die;
            }

        }catch (\Exception $e){var_dump($e);exit;}
    }

    /*
     * test
     * ***/
    public  function testAction(){
        $db = $this->loadMiniDb();
        $my_image = array(
            'user_id'=>'yuzhaoxi',
            'create_time' => time(),
            'image_url'=>'nihaourl',
            'is_private'=> '1',
        );
       $result =  $db->insert('mini_myimages',$my_image);
        var_dump($result);

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

    public function getmyfilelistAction(){
        $username  = isset($_REQUEST['username']) ? $_REQUEST['username'] :'';

        if(!$username)
        {
            echo json_encode(array(
                'status'=>'403',
                'msg' => 'username is needed'

            ));
        }

        $files_name = $this->listDir('upload/images/'.$username.'/');
//        var_dump($files_name);exit;
        if($files_name){
            foreach($files_name as $key =>$value){
                $files_name[$key] = 'https://wx.1905.com/miniprograms/upload/images/'.$username.'/'.$value;
            }
            $result['status'] = '200';
            $result['data'] = $files_name;
            $result['msg'] = 'OK';
        }
        else
        {
            $result['status'] = '406';
            $result['msg'] = 'the dir is null';
        }

        echo json_encode($result);
    }

    private function listDir($dir)
    {
        if(is_dir($dir))
        {
            if ($dh = opendir($dir))
            {
                $result = array();
                while (($file = readdir($dh)) !== false)
                {
                    if((is_dir($dir."/".$file)) && $file!="." && $file!="..")
                    {
                        listDir($dir."/".$file."/");
                    }
                    else
                    {
                        if($file!="." && $file!="..")
                        {
                            $result[]  = $file;

                        }
                    }
                }
                closedir($dh);
                return $result;
            }
        }
        else{
            return false;
        }
    }

}
?>
