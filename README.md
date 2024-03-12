# bingo

## Technical requirements for platform where this program will run

`php` available in the command line environment.

## help

For help - i.e. to understand how to run the program and what input parameters to supply, type:

`php -f bingo.php`

(i.e. without any parameters - to trigger usage info to be shown.)

## example files to use

Example files provided in this repository:

- `calledNumbers.txt`
- `card1.txt`
- `card2.txt`
- `card3.txt`

## running the program with the examples

### part 1

php -f bingo.php calledNumbers.txt card1.txt

### part 2

php -f bingo.php calledNumbers.txt card1.txt card2.txt card3.txt

#### finding the card which wins the earliest

This is provided in the output when more than one card is provided.


## unit testing and testing

- unit tests are php files that start with `test` in their filename. Output of these tests are stored in `tests/` folder
- helper functions for use with the tests and for debugging end with `AsStr` in their filename.



