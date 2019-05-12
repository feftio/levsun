<?php
/**
 * 
 */
class LoginController
{

//	**************************************************
//	**************************************************

	public function actionIndex()
	{
		function regUser()
		{
			$data = $_POST;
	
			$errors = [];

			if (trim($data["login"]) == "")
			{
				$errors["login"] = "Введите логин";
			}

			if (trim($data["email"]) == "")
			{
				$errors["email"] = "Введите Email";
			}

			if ($data["password"] == "")
			{
				$errors["password"] = "Введите пароль";
			}

			if ($data["password_r"] != $data["password"])
			{
				$errors["password_r"] = "Повторный пароль введен не верно";
			}

			if (empty($errors))
			{
				$user = R::dispense('users');
				$user->login    = $data["login"];
				$user->email    = $data["email"];
				$user->password = $data["password"];
				$user->date     = '26.01.99';
				R::store($user);
				echo json_encode(["success" => "Регистрация прошла успешно!"]);
			}
			else
			{
				echo json_encode($errors);
			}
		}

		if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
		{
			regUser();
		}
		else
		{
			G::setvar(True, [
				'css' => [
					'login.css'
				]
			]);
			View::render('login.php');
		}
	}

//	**************************************************
//	**************************************************

}