#!/bin/bash
if [[ $1 = "-h" ]];
then
	echo -e "Enter your parameter as in the example:\n./Level_3.sh -u http://example.com -w Word -f ~/Desktop/exampleFile"
	exit
fi

while [ $# -ne 0 ]; do
      case "$1" in
        -u)
          URL=$2
          ;;
        -w)
		  WORD=$2
		  ;;
 		-f)
		  FILE=$2
		  ;;
      esac
      shift
    done


countHarry=$(curl "$URL" | grep -c "$WORD")
lineHarry=$(curl "$URL" | sed -n "/"$WORD"/=" | tr '\n' ', ')

if [[ -z $URL ]];
then
	echo "Specify the first parameter URL!!"
fi

if [[ -z $WORD ]];
then
	echo "Indicate that you are looking for the second parameter!!"
fi

if [[ -n $FILE ]]; 
then
	echo "$WORD: $countHarry [$lineHarry]" > $FILE
else
	echo "Specify the path in the third parameter!!"
fi




