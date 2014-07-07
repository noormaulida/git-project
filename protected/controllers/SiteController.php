<?php

class SiteController extends Controller
{
	public function actions()
	{
		return array(
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}


	public function actionIndex()
	{
		$model=new LoginForm;
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			if($model->validate() && $model->login()) {
				Yii::app()->session['admin'] = Yii::app()->user->name;
				$this->redirect(Yii::app()->user->returnUrl);
			}
		}

		if(isset($_POST['editheader'])) {
			$konten = Konten::model()->findBy_id($_POST['idheader']);
			$konten->header = $_POST['editheader'];
			$konten->save();
			unset($_POST['editheader']);
		}

		if(isset($_POST['editdeskripsi'])) {
			$konten = Konten::model()->findBy_id($_POST['iddeskripsi']);
			$konten->jurusan = $_POST['editdeskripsi'];
			$konten->save();
			unset($_POST['editdeskripsi']);
		}

		//idnews

		if(isset($_POST['avail'])) {
			$listvals = $_POST['avail'];
			$n=count($listvals);
			$total = $_POST['total'];
			
			for($i = 1; $i <= $n; $i++) {
  				if($listvals[$i] == 1) {
  					
  				}
  			}

  			echo '<script type="text/javascript">
			alert(\'Data berhasil disimpan\');
			</script>'; 			
  			

			//for($)
			//echo $_POST['idnews'];
//			$konten = Konten::model()->findBy_id($_POST['iddeskripsi']);
//			$konten->jurusan = $_POST['editdeskripsi'];
//			$konten->save();
//			unset($_POST['editdeskripsi']);
		}

		$folder = getcwd()."\protected\import"."\\";
		if(isset($_FILES['filename']['tmp_name'])) {
			if (is_uploaded_file($_FILES['filename']['tmp_name']))  {  
			    if (move_uploaded_file($_FILES['filename']['tmp_name'], $folder.$_FILES['filename']['name'])) {
			         Echo "File uploaded" . ' ' . $folder.$_FILES['filename']['name'];
			    } else {
			         Echo "Cek permission file";
			    }
			}
			unset($_FILES['filename']['tmp_name']);
		}

		$sheet_array = Yii::app()->yexcel->readActiveSheet('D:\TA\www\runningTA\protected\import\Jadual EAS IF_4Juni2014_5_28.xls');
		//
/*		$model2=new HeaderForm;
		if(isset($_POST['ajax']) && $_POST['ajax']==='header-form')
		{
			echo CActiveForm::validate($model2);
			Yii::app()->end();
		}

		if(isset($_POST['HeaderForm']))
		{
			$model->attributes=$_POST['HeaderForm'];
			if($model2->edit()) {
				Yii::app()->session['admin'] = Yii::app()->user->name;
				$this->redirect(Yii::app()->user->returnUrl);
			}
		}
*/
		// /unset(Yii::app()->session['admin']);

		$dosen=Staf::model()->find();		
		$berita=News::model()->find(array('source' => 'Twitter'));		
		$konten=Konten::model()->find();
		$utama=Utama::model()->find();
		//$berita = Yii::app()->mongodb->news->find(array('source' => 'Twitter @hmtc_its'));
		$this->render('index',array('dosen'=>$dosen,'berita'=>$berita, 'utama'=>$utama,'model'=>$model, 'konten'=>$konten, 'sheet_array' => $sheet_array) );
			

		
	}

	public function actionNews()
	{
		$this->render('index',array('berita'=>$berita));
	}

	public function actionGetStatus($id){
        echo json_encode(Yii::app()->background->getStatus($id));
        Yii::app()->end();
    }

    

	public function xml2json ($url) {

		$fileContents= file_get_contents($url);
		$fileContents = str_replace(array("\n", "\r", "\t"), '', $fileContents);
		$fileContents = trim(str_replace('"', "'", $fileContents));
		$simpleXml = simplexml_load_string($fileContents);
		$json = json_encode($simpleXml);
		return $json;
	}
	
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	
	public function actionLogin()
	{
		$model=new LoginForm;
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		$this->render('login',array('model'=>$model));
	}

	public function actionLogout()
	{
		Yii::app()->user->logout();
		Yii::app()->session->destroy();
		$this->redirect(Yii::app()->homeUrl);
	}
}