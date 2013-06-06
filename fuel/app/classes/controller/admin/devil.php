<?php
class Controller_Admin_Devil extends Controller_Admin 
{

	public function action_index()
	{
		$data['devils'] = Model_Devil::find('all');
		$this->template->title = "Devils";
		$this->template->content = View::forge('admin\devil/index', $data);

	}

	public function action_view($id = null)
	{
		$data['devil'] = Model_Devil::find($id);

		$this->template->title = "Devil";
		$this->template->content = View::forge('admin\devil/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Devil::validate('create');

			if ($val->run())
			{
				$devil = Model_Devil::forge(array(
					'name' => Input::post('name'),
					'lv' => Input::post('lv'),
					'hp' => Input::post('hp'),
					'mp' => Input::post('mp'),
					'power' => Input::post('power'),
					'technique' => Input::post('technique'),
					'magic' => Input::post('magic'),
					'speed' => Input::post('speed'),
					'luck' => Input::post('luck'),
					'regist_physical' => Input::post('regist_physical'),
					'regist_gun' => Input::post('regist_gun'),
					'regist_fire' => Input::post('regist_fire'),
					'regist_ice' => Input::post('regist_ice'),
					'regist_electric' => Input::post('regist_electric'),
					'regist_impact' => Input::post('regist_impact'),
					'regist_exorcism' => Input::post('regist_exorcism'),
					'regist_curse' => Input::post('regist_curse'),
					'class_id' => Input::post('class_id'),
				));

				if ($devil and $devil->save())
				{
					Session::set_flash('success', e('Added devil #'.$devil->id.'.'));

					Response::redirect('admin/devil');
				}

				else
				{
					Session::set_flash('error', e('Could not save devil.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Devils";
		$this->template->content = View::forge('admin\devil/create');

	}

	public function action_edit($id = null)
	{
		$devil = Model_Devil::find($id);
		$val = Model_Devil::validate('edit');

		if ($val->run())
		{
			$devil->name = Input::post('name');
			$devil->lv = Input::post('lv');
			$devil->hp = Input::post('hp');
			$devil->mp = Input::post('mp');
			$devil->power = Input::post('power');
			$devil->technique = Input::post('technique');
			$devil->magic = Input::post('magic');
			$devil->speed = Input::post('speed');
			$devil->luck = Input::post('luck');
			$devil->regist_physical = Input::post('regist_physical');
			$devil->regist_gun = Input::post('regist_gun');
			$devil->regist_fire = Input::post('regist_fire');
			$devil->regist_ice = Input::post('regist_ice');
			$devil->regist_electric = Input::post('regist_electric');
			$devil->regist_impact = Input::post('regist_impact');
			$devil->regist_exorcism = Input::post('regist_exorcism');
			$devil->regist_curse = Input::post('regist_curse');
			$devil->class_id = Input::post('class_id');

			if ($devil->save())
			{
				Session::set_flash('success', e('Updated devil #' . $id));

				Response::redirect('admin/devil');
			}

			else
			{
				Session::set_flash('error', e('Could not update devil #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$devil->name = $val->validated('name');
				$devil->lv = $val->validated('lv');
				$devil->hp = $val->validated('hp');
				$devil->mp = $val->validated('mp');
				$devil->power = $val->validated('power');
				$devil->technique = $val->validated('technique');
				$devil->magic = $val->validated('magic');
				$devil->speed = $val->validated('speed');
				$devil->luck = $val->validated('luck');
				$devil->regist_physical = $val->validated('regist_physical');
				$devil->regist_gun = $val->validated('regist_gun');
				$devil->regist_fire = $val->validated('regist_fire');
				$devil->regist_ice = $val->validated('regist_ice');
				$devil->regist_electric = $val->validated('regist_electric');
				$devil->regist_impact = $val->validated('regist_impact');
				$devil->regist_exorcism = $val->validated('regist_exorcism');
				$devil->regist_curse = $val->validated('regist_curse');
				$devil->class_id = $val->validated('class_id');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('devil', $devil, false);
		}

		$this->template->title = "Devils";
		$this->template->content = View::forge('admin\devil/edit');

	}

	public function action_delete($id = null)
	{
		if ($devil = Model_Devil::find($id))
		{
			$devil->delete();

			Session::set_flash('success', e('Deleted devil #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete devil #'.$id));
		}

		Response::redirect('admin/devil');

	}


}