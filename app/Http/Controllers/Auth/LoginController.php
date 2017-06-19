<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\BaseController;
use App\Models\User;
use App\Http\Validation\Validator;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

/**
 * @property  \Slim\Views\Twig view
 * @property  \Slim\Router     router
 * @property  \App\Http\Validation\ validator
 */
class LoginController extends BaseController
{
    
    /**
     * Index Page return the Login form
     *
     * @param \Psr\Http\Message\ServerRequestInterface $request
     * @param \Psr\Http\Message\ResponseInterface      $response
     * @param                                          $args
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function index(ServerRequestInterface $request, ResponseInterface $response, $args)
    {
        return $this->view->render($response, 'auth/login.twig');
    }
    
    /**
     * Register new users
     *
     * @param \Psr\Http\Message\ServerRequestInterface $request
     * @param \Psr\Http\Message\ResponseInterface      $response
     * @param                                          $args
     */
    public function login(ServerRequestInterface $request, ResponseInterface $response, $args)
    {
        if ($this->auth->attempt($request->getParam('email'), $request->getParam('password'))) {
            dd('LOGIN IN');
        }
        dd('NO LOGIN');
    }
    
}
