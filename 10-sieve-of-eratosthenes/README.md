# Sieve of Eratosthenes

## Theoretical introduction

> The sieve of Eratosthenes is a simple, ancient algorithm for finding all prime numbers up to any given limit. It does so by iteratively marking as composite (i.e., not prime) the multiples of each prime, starting with the multiples of 2.
>
> Wikipedia, [Sieve of Eratosthenes](https://en.wikipedia.org/wiki/Sieve_of_Eratosthenes)

## Description of the algorithm

> The multiples of a given prime are generated as a sequence of numbers starting from that prime, with constant difference between them that is equal to that prime.[1] This is the sieve's key distinction from using trial division to sequentially test each candidate number for divisibility by each prime.[2]
>
> Wikipedia, [Sieve of Eratosthenes](https://en.wikipedia.org/wiki/Sieve_of_Eratosthenes)

A visual representation:

![from wikipedia](https://upload.wikimedia.org/wikipedia/commons/b/b9/Sieve_of_Eratosthenes_animation.gif)

(Source is [Wikimedia Commons, Sieve_of_Eratosthenes_animation](https://upload.wikimedia.org/wikipedia/commons/b/b9/Sieve_of_Eratosthenes_animation.gif))

## Problem description

Create a program that is able to calculate all the prime numbers up to a higher bound.

Given that:

> The sieve of Eratosthenes is one of the most efficient ways to find all of the smaller primes
>
> Wikipedia, [Sieve of Eratosthenes](https://en.wikipedia.org/wiki/Sieve_of_Eratosthenes)

Calculate the algorithmic cost of the program in [Big O Notation](https://en.wikipedia.org/wiki/Big_O_notation)

## Samples

```
eratosthenes 5: 2, 3, 5
eratosthenes 10: 2, 3, 5, 7
```
