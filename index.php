<?php

/**
 * @Author: William Berge Groensberg
 * @Date:   2025-10-01 14:26:53
 * @Last Modified by:   William Berge Groensberg
 * @Last Modified time: 2025-11-26 15:00:49
 */

// Project #3 — “Mini Profile Card”

// Make a PHP page that:

// Has variables for your name, age, and favorite color.

// Prints a little “profile card” that looks like a short intro paragraph (like: “Hi, I’m William. I’m 18 and my favorite color is blue.”).

// Use double quotes in one sentence and single quotes + concatenation (.) in another.

// Bonus: If the age is 18 or over, also print a line that says “You’re an adult.”


$profileName = "William";
$profileAge = 17;
$profileFavColor = "royal blue";

echo ("hi i am $profileName and i am $profileAge years old. my faverit color is $profileFavColor.");

echo ('hi i am ' . $profileName . ' and i am ' . $profileAge . ' years old.' . 'and my favorit color is ' . $profileFavColor);

if ($profileAge >= 18) {
	echo ("du er voksen");
} elseif ($profileAge < 18) {
	echo ("du er kke voksen");
}
