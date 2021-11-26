#!/bin/bash
echo " = = = =>> Prepare uploding to github . . ."
user=`head -n 1 gituser.txt`
repo=`head -n 1 gitrepo.txt`
cd export/deploy/public
git init
git add . 
git commit -m "$user is processing first upload project"  
git remote add origin https://$user@github.com/$user/$repo.git
git push origin master
echo
echo " = = = = =>> Alhamdulillah Done << = = = = = "
