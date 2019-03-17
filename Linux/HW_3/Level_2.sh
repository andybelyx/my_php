#!/bin/bash

    USER=andybelyx
    HOST=students.a-level.com.ua
    DIR="~/"
    NAME="image.png"
    FILE="/home/php/Desktop/$NAME"
    
    COMMAND=`import -window root $NAME`
    
    OUTPUT=`scp $FILE $USER@$HOST:$DIR`

echo "$USER@$HOST:$DIR$NAME"


