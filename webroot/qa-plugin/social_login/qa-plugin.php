<?php
/*
 * Author	Tomheng
 * Blog  	http://blog.webfuns.net
 * Created  Feb 11, 2012
 * Description a plugin which tweak Q2A to running on SAE
 */

/*
 Plugin Name: Social Login
 Plugin URI: http://q2achina.sinaapp.com/socail_login
 Plugin Description: Login with other social network
 Plugin Version: 1.0
 Plugin Date: 2012-04-6
 Plugin Author: Tomheng
 Plugin Author URI: http://blog.webfuns.net
 Plugin License: GPLv2
 Plugin Minimum Question2Answer Version: 1.5
 Plugin Update Check URI: htpp://q2achina.sinaapp.com/check/socail_login
 */

// don't allow this page to be requested directly from browser
if (!defined('QA_VERSION')) {
	header('Location: ../../');
	exit;
}

/*---------------------------------------------------------
 *
 * 注册插件功能
 *
 *--------------------------------------------------------*/
qa_register_plugin_module('login', 'qa-sw-login.php', 'ST_Login', '新浪微博登录'); //支持新浪微博登陆
qa_register_plugin_module('login', 'qa-qq-login.php', 'QQ_Login', '腾讯QQ登录');   //支持QQ登陆


/*
 * OPEN ID登陆
 */
class Connect{
	protected $name = '';
	protected $id = '';

	protected $directory;
	protected $urltoroot;

	protected $key = '';
	protected $secret = '';

	public function __construct(){

		$this->key_opt_name = $this->id.'_app_key';
		$this->secret_opt_name = $this->id.'_app_secret';
		
	}

	protected function enable(){
		$this->key = qa_opt($this->key_opt_name);
		$this->secret = qa_opt($this->secret_opt_name);
		return strlen($this->key) && strlen($this->secret);
	}

	public function load_module($directory, $urltoroot) {
		$this->directory = $directory;
		$this->urltoroot = $urltoroot;
	}

	public function admin_form() {
		
		$saved = false;
		$btn_name = "{$this->id}_save_button";
		if (qa_clicked($btn_name)) {
			$this->key = &qa_post_text($this->key_opt_name);
			$this->secret = &qa_post_text($this->secret_opt_name);
			$this->key != qa_opt($this->key_opt_name) && qa_opt($this->key_opt_name, $this->key);
			$this->secret != qa_opt($this->secret_opt_name) && qa_opt($this->secret_opt_name, $this->secret);
			$saved = true;
		}else{
			$this->enable();
		}

		return array(
				'ok' => $saved ? '信息保存成功' : null,
				'fields' => array(
						array(
							'label' => 'App KEY:',
							'value' => qa_html($this->key),
							'tags' => "NAME='{$this->key_opt_name}'",
						),
						array(
							'label' => 'App Secret:',
							'value' => qa_html($this->secret),
							'tags' => "NAME='{$this->secret_opt_name}'",
						),
				),
				'buttons' => array(
						array(
							'label' => '保存设置',
							'tags' => "NAME='{$btn_name}'",
						),
				),
		);
	}
}