<?php
/**
 * Typecho ئۇيغۇرچە تونۇتۇش قىستۇرمىسى
 * 
 * @package Typecho ئۇيغۇرچە تونۇتۇش قىستۇرمىسى
 * @author doghap
 * @version 1.0.0
 * @dependence 9.9.2-*
 * @link http://doghap.net
 */
class TypechoUyghurInput_Plugin implements Typecho_Plugin_Interface
{
    /**
     * 激活插件方法,如果激活失败,直接抛出异常
     * 
     * @access public
     * @return void
     * @throws Typecho_Uyghur_Style_Plugin_Exception
     */
    public static function activate()
    {
        Typecho_Plugin::factory('admin/header.php')->header = array('TypechoUyghurInput_Plugin', 'header');
        Typecho_Plugin::factory('Widget_Archive')->header = array('TypechoUyghurInput_Plugin', 'header');
    }
    
	
    /**
     * 禁用插件方法,如果禁用失败,直接抛出异常
     * 
     * @static
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function deactivate(){}
    
    /**
     * 获取插件配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form 配置面板
     * @return void
     */
    public static function config(Typecho_Widget_Helper_Form $form){}
    
    /**
     * 个人用户的配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form
     * @return void
     */
    public static function personalConfig(Typecho_Widget_Helper_Form $form){}
    
    
    /**
     * 输出尾部js
     * 
     * @access public
     * @param unknown $header
     * @return unknown
     */
    public static function header($header) {

        list($prefixVersion, $suffixVersion) = explode('/', Helper::options()->version);

        $header .= '<script src="' . Helper::options()->pluginUrl.'/TypechoUyghurInput/src/ug_vk.js?v=' . $suffixVersion . '"></script>';

		$jsUrl = Helper::options()->pluginUrl . '/ug_vk.js';
        echo $header;
    }
	
}
