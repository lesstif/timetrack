<?php namespace Lesstif\TimeTrack;

use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Symfony\Component\Console\Command\Command as SymfonyCommand;

class Prompt extends SymfonyCommand
{
    /**
     * The input interface implementation.
     *
     * @var \Symfony\Component\Console\Input\InputInterface
     */
    protected $input;

    /**
     * @var array
     */
    protected $commandList = [
        'new',
        'into',
        'inspire',
        'help',
    ];

    /**
     * @var string
     */
    protected $name = 'timetrack';

    public function __construct()
    {
        parent::__construct($this->name);
    }
}