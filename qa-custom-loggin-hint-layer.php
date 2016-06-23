<?php

class qa_html_theme_layer extends qa_html_theme_base {

	public function a_form($a_form)
	{
		if (!qa_is_logged_in()) {
			$a_form['title'] = '';
		}
		qa_html_theme_base::a_form($a_form);
	}

	public function c_form($c_form)
	{
		$this->output('<div class="qa-c-form"'.(isset($c_form['id']) ? (' id="'.$c_form['id'].'"') : '').
			(@$c_form['collapse'] ? ' style="display:none;"' : '').'>');

		if (!qa_is_logged_in()) {
			$this->c_form_message();
		} else {
			$this->form($c_form);
		}
		$this->output('</div> <!-- END qa-c-form -->', '');
	}

	private function c_form_message()
	{
		$title = qa_lang_html('custom_loggin_hint/message_title');
		$this->output('<h3>'.$title.'</h3>');
		$message = $this->insert_into_links(qa_lang_html('custom_loggin_hint/user_regist'), '/register');
		$this->output('<p style="font-size:85%">',$message,'</p>');
		$message = $this->insert_into_links(qa_lang_html('custom_loggin_hint/user_login'), '/login');
		$this->output('<p style="font-size:85%">',$message,'</p>');
	}

	private function insert_into_links($message, $link)
	{
		return strtr(
			$message,
			array(
				'^1' => '<a href="'.qa_html($link).'">',
				'^2' => '</a>',
			)
		);
	}

}
