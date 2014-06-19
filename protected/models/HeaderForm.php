<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class HeaderForm extends CFormModel
{
	public $header;

	public function rules()
	{
		return array(
			array('header', 'required'),
		);
	}

	
	public function edit()
	{
		$konten=Konten::model()->findAndModify({ query: {"header": "hehe"}, update: {"header": "haha"}, upsert: "true"});
		//db.konten.findAndModify({    query: {name: "Andi"},     update: { name: "Haha"},     upsert: true    })

		if($this->_identity===null)
		{
			$this->_identity=new UserIdentity($this->username,$this->password);
		}
		if($this->_identity->errorCode===UserIdentity::ERROR_NONE)
		{
			$duration=$this->rememberMe ? 3600*24*30 : 0; // 30 days
			Yii::app()->user->login($this->_identity,$duration);
			return true;
		}
		else
			return false;
	}
}
