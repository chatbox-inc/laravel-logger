<?php
namespace Chatbox\Logger\Logger\Handlers;
use Illuminate\Database\Eloquent\Model;
use Monolog\Handler\AbstractProcessingHandler;
/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 2016/06/03
 * Time: 1:33
 */
class EloquentHandler extends AbstractProcessingHandler
{
    protected $model;

    public function __construct(Model $model,$level, $bubble)
    {
        $this->model = $model;
        parent::__construct($level, $bubble);
    }

    protected function write(array $record)
    {
        $this->model->create($record);
    }
}