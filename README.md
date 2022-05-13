# Tennis Refactoring Kata - PHP Version

## Introduction

Introduction taken from the [original GitHub repository](https://github.com/emilybache/Tennis-Refactoring-Kata/)

Tennis has a rather quirky scoring system, and to newcomers it can be a little difficult to keep track of. The tennis society has contracted you to build a scoreboard to display the current score during tennis games.

You can read more about Tennis scores on wikipedia which is summarized below:

1. A game is won by the first player to have won at least four points in total and at least two points more than the 
opponent.


2. The running score of each game is described in a manner peculiar to tennis: scores from zero to three points are 
described as “Love”, “Fifteen”, “Thirty”, and “Forty” respectively.


3. If at least three points have been scored by each player, and the scores are equal, the score is “Deuce”.


4. If at least three points have been scored by each side and a player has one more point than his opponent, the score of 
the game is “Advantage” for the player in the lead.


5. You need only report the score for the current game. Sets and Matches are out of scope.

## Installation

### Requirements

This kata needs:

- [Docker Compose](https://docs.docker.com/compose/install/) to run the `docker-compose` script

Recommended:

- [Git](https://git-scm.com/downloads)

The containerized PHP image uses:

- [PHP 8.1-FPM](https://hub.docker.com/_/php/)
- [Composer](https://getcomposer.org/)

### Dependencies

The kata itself uses Composer to install:

- [PHPUnit](https://phpunit.de/)
- [PHPStan](https://github.com/phpstan/phpstan/)
- [Easy Coding Standard (ECS)](https://github.com/symplify/easy-coding-standard/)

### Setting up

1. Clone the repository

```shell
git clone git@github.com:ganiulis/Tennis-Refactoring-Kata.git
```

or

```shell
git clone https://github.com/ganiulis/Tennis-Refactoring-Kata.git
```

2. Start the PHP container

```shell
docker-compose up -d
```

4. Enter the container and install all dependencies with Composer

```shell
docker-compose exec php zsh
```

and

```shell
composer install
```

## Testing

PHPUnit is pre-configured to run tests. PHPUnit can be run using a composer script. To run the unit tests, from the
 root of the PHP kata run:

```shell script
make test
```

### Tests

To run all test and generate a html coverage report run:

```shell script
make coverage
```

The test-coverage report will be created in /builds, it is best viewed by opening **index.html** in 
your browser.

### Linter

To check code, but not fix errors:

```shell
make lint
```

and

```shell
make phpstan
```

There are some preconfigured code style fixes provided by ECS, the following script can be run:

```shell
make lint-fix
```

### Static Analysis

PHPStan is used to run static analysis checks:

```shell script
make phpstan
```

### Q&A

1. How did it feel to work with such fast, comprehensive tests? 
   
   * Easy to check if the refactored code did not mess anything up. Tests are important to maintain
   use of code between refactoring and tinkering.


2. Did you make mistakes while refactoring that were caught by the tests? 

   * Of course. With complicated algorithmic code such as this one it's impossible to maintain 
   it without thorough testing.


3. If you used a tool to record your test runs, review it. Could you have taken smaller steps? Made 
fewer refactoring mistakes? 

   * Maybe. Not sure. Would probably be a lot slower in the beginning given TDD's slower, more careful
   approach to writing new functionality.


4. Did you ever make any refactoring mistakes and then back out your changes? How did it feel to throw 
away code? 

   * Code is never permanent, and it is frequently thrown away. The less attachment you feel to what
   you've written - the better.


5. What would you say to your colleague if they had written this code? 

   * There are about a hundred different ways to make the Scoreboard class better - if it is necessary
   at all - but as long as it doesn't break, you can always come back to improve it later.


6. What would you say to your boss about the value of this refactoring work? Was there more reason to do it over and 
above the extra billable hour or so?

   * New features and any bugs can be fixed more easily if the code is cleaner and the tests pass
   consistently.
