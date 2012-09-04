<?php

class GuestbookController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $page = $this->_getParam('page', 1);
        $guestbook = new Application_Model_Guestbook();
        $paginator = Zend_Paginator::factory($guestbook->latest());
        $paginator->setItemCountPerPage(10);
        $paginator->setCurrentPageNumber($page);
        $this->view->entries = $paginator;
    }

    public function signAction()
    {
        $request = $this->getRequest();
        $form = new Application_Form_Guestbook();

        if ($this->getRequest()->isPost()) {
            if ($form->isValid($request->getPost())) {
                $model = new Application_Model_Guestbook();
                $model->save($form->getValues());
                return $this->_helper->redirector('index');
            }
        }

        $this->view->form = $form;
    }


}



