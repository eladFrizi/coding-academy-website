#!/bin/bash 

branch=$(git branch | sed -n -e 's/^\* \(.*\)/\1/p')
# echo $branch
git push heroku $branch:master
