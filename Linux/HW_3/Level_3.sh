#!/bin/bash

    USER=andybelyx
    HOST=students.a-level.com.ua
    DIR="~/backup"
    FILE="/home/php/Desktop/test"
    TARFILE="/home/php/Desktop/test.tar"
    
    

 while true;
 do
    TAR=`tar -cf test.tar $FILE`
    OUTPUT=`scp $TARFILE $USER@$HOST:$DIR`
    sleep 300;
done;
