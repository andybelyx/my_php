#!/bin/bash
countHarry=$(curl "$1" | grep -o "$2" | wc -l)
lineHarry=$(curl "$1" | sed -n "/"$2"/=" | tr '\n' ', ')

if [[ -z $1 ]];
then
	echo "Specify the first parameter URL!!"
fi

if [[ -z $2 ]];
then
	echo "Indicate that you are looking for the second parameter!!"
fi

if [[ -n $3 ]]; 
then
	echo "$2: $countHarry [$lineHarry]" > $3
else
	echo "Specify the path in the third parameter!!"
fi




