<?php
/**
 * Created by PhpStorm.
 * User: Felix
 * Date: 2017/3/4
 * Time: 下午3:08
 */

namespace AppBundle\Admin;


use AppBundle\Entity\BlogPost;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

class BlogPostAdmin extends AbstractAdmin
{
	/**
	 * @return boolean
	 */
	public function toString($object)
	{
		return $object instanceof BlogPost
			? $object->getTitle()
			: '发布';
	}

	protected function configureFormFields(FormMapper $form)
	{
		$form
			->tab('发布')
				->with('Content', array('class' => 'col-md-9'))
					 ->add('title', 'text')
					 ->add('body', 'textarea')
				 ->end()
			->end()
			->tab('发布选项')
				 ->with('Meta data', array('class'=> 'col-md-3'))
					 ->add('category', 'sonata_type_model', array(
					     'class' => 'AppBundle\Entity\Category',
						 'property' => 'name',
					 ))
				 ->end()

		;
	}

	/**
	 * 配置列表展示字段
	 * @inheritdoc http://symfony.com/doc/current/bundles/SonataAdminBundle/reference/action_list.html
	 * @param ListMapper $list
	 */
	protected function configureListFields(ListMapper $list)
	{
		$list->addIdentifier('title', null, array(
				'label' => '标题',
			))
			 ->add('category.name', null, array(
				'identifier' => true,
			 ))
			 ->add('draft')
		;
	}

	protected function configureDatagridFilters(DatagridMapper $filter)
	{
		$filter
			->add('title')
			->add('category', null, array(), 'entity', array(
				'class' => 'AppBundle\Entity\Category',
				'choice_label' => 'name',
			))
		;
	}
}