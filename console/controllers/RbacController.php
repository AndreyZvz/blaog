<?php
namespace console\controllers;

use Yii;
use yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;
        $auth->removeAll();
        
        // add "createPost" permission
        $createPost = $auth->createPermission('createPost');
        $createPost->description = 'Create a post';
        $auth->add($createPost);

        // add "updatePost" permission
        $updatePost = $auth->createPermission('updatePost');
        $updatePost->description = 'Update post';
        $auth->add($updatePost);
        
        $client = $auth->createRole('client');
        $auth->add($client);
        $auth->addChild($client,$createPost);
        
        $user = $auth->createRole('user');
        $auth->add($user);
        $auth->addChild($user, $createPost);

        $manager = $auth->createRole('manager');
        $auth->add($manager);
        $auth->addChild($manager, $createPost);
        
        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $updatePost);
        $auth->addChild($admin, $manager);

        $auth->assign($client, 4); 
        $auth->assign($user, 3);    
        $auth->assign($manager, 2);
        $auth->assign($admin, 1);
    }
}