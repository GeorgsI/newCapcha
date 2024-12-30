<?php 
defined('_JEXEC') or die; 
use Joomla\CMS\Factory;
//$session = Factory::getSession();


// = JFactory::getApplication()->input->post->get('capcha', '');



if(isset($value) && $session->get('myVa') == $value /*&& !empty($value)*/){
    echo $session->get('myVa');
   // header('Location: http://joomlatest');
    /*echo $value;
    echo 1;*/
}
else{
   
    var_dump( 'session'.$session->get('myVa'));
    echo 'input'.$value;
    //echo "no";
   // $session->clear();
    $value = '';
    echo 'input'.$value;
}









?>


<div class="wrapper-capcha">
<form  method='POST' action="/" class="form-capcha">
    <div class="exam "><?php echo $str; ?></div>
    <button class="btn btn-capcha btn-capcha-main ">Обновить</button>
    <input type='text' name='capcha' class="field-capcha" placeholder='введите тест' >
    <input type='submit' name='submit' value='Отправить' class="btn-capcha">
    
</form>
</div>
    

<style>
    .wrapper-capcha{
        width: 100%;
        /*height: 100vh;*/
        
        -webkit-box-shadow: -6px -5px 41px 1px rgba(20, 86, 172, 0.2);
        -moz-box-shadow: -6px -5px 41px 1px rgba(20, 86, 172, 0.2);
        box-shadow: -6px -5px 41px 1px rgba(20, 86, 172, 0.2);
    }
    .form-capcha>*{
        margin-top: 20px;
    }
    .btn-capcha{
        border-radius: 5px;
        background: #1a73e8;
        color: #fff;
        padding: 5px 6px;
        border: 2px solid #1a73e8;
        cursor: pointer;


    }
    .field-capcha{
        border-radius: 5px;
        border: 1px solid #666;
        padding: 5px 6px;
    }
    .form-capcha{
        width: 300px;
        position: absolute;
        transform: translate(-50%, -50%);
        top: 50%;
        left: 50%;
        display: flex;
        flex-direction: column;
    }




</style>



<script>
    document.querySelector('.btn-capcha-main').onclicn = function(){
        document.querySelector('.exam').innrHTML = "/";
    }
</script>

