#!/bin/bash

while [ $# -ne 0 ]; do
      case "$1" in
        -h)
          HOST=$2
          ;;
        -f)
		  FILE=$2
		  ;;
      esac
      shift
    done

    USER=andybelyx
    DIR="~/"

    COMMAND=""

    OUTPUT=`scp $FILE $USER@$HOST:$DIR`