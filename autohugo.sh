#!/bin/bash
Clear

echo "____________  _____________________  ______  ________________     ________";
echo "___    |_  / / /__  __/_  __ \__  / / /_  / / /_  ____/_  __ \    __|__  /";
echo "__  /| |  / / /__  /  _  / / /_  /_/ /_  / / /_  / __ _  / / /    ___/_ < ";
echo "_  ___ / /_/ / _  /   / /_/ /_  __  / / /_/ / / /_/ / / /_/ /     ____/ / ";
echo "/_/  |_\____/  /_/    \____/ /_/ /_/  \____/  \____/  \____/      /____/  ";
echo "                                                                          ";

PS3='Please Choose the Job You Will Do ... Good Luck: '
mods=("Login and logout or status account Netlify" "Build Fresh Hugo and auto deploy to Netlify" "Update Content with existing data and auto deploy to Netlify" "Build Hugo with already data and auto deploy to Netlify" "Build fresh hugo with costume domain until ready deploy to other Host" "Build hugo with costume domain and existing data until ready deploy to other Host" "Build fresh hugo on local and auto deploy via Github" "Build fresh hugo on server and auto deploy via Github" "Build hugo on local with existing data and auto deploy via Github" "Build hugo on server with existing data and auto deploy via Github" "Build Fresh Hugo with custom domain and deploy to Netlify" "Clear all data" "Quit")

echo "Welcome to AUTOHUGO 3 Menu : "
echo 
select fav in "${mods[@]}"; do
    case $fav in
    	"Login and logout or status account Netlify")
            echo "$fav Bismillah !" && sh createnetlify.sh
        # netlify account check, login or logout
            ;;
        "Build Fresh Hugo and auto deploy to Netlify")
            echo "$fav Bismillah !" && sh hugonetlify.sh
        # clear all data - scraping kw - export hugo - deploy netlify
            ;;
        "Update Content with existing data and auto deploy to Netlify")
            echo "$fav Bismillah . . ." && sh auto3.sh
        # Update data - generated content - export hugo - deploy netlify
            ;;
        "Build Hugo with already data and auto deploy to Netlify")
            echo "Bismillah ... $fav " && sh data.sh
        # clear all data - inject new data - generated - export hugo - deploy
            ;;
        "Build fresh hugo with costume domain until ready deploy to other Host")
            echo "Bismillah , $fav " && sh shu3hugo.sh
        # clear all data - costume domain - scraping - export - build hugo
            ;;
        "Build hugo with costume domain and existing data until ready deploy to other Host")
            echo "$fav Bismillah . . ." && sh data2hugo.sh
        # costume domain - generated - export - build hugo
            ;;
        "Build fresh hugo on local and auto deploy via Github")
            echo "Bismillah , $fav " && sh gitfreshlocal.sh
        # clear all data - scraping -> build hugo -> Githhub
            ;;
        "Build fresh hugo on server and auto deploy via Github")
            echo "Bismillah , $fav " && sh gitfreshost.sh
        # clear all data - scraping - export hugo -> Githhub
            ;;
        "Build hugo on local with existing data and auto deploy via Github")
            echo "$fav Bismillah . . ." && sh gitlocal.sh
        # data ready - generated content -> Build Hugo -> github
            ;;
        "Build hugo on server with existing data and auto deploy via Github")
            echo "$fav Bismillah . . ." && sh githost.sh
        # data ready - generated content - export hugo -> github
            ;;
        "Build Fresh Hugo with custom domain and auto deploy to Netlify")
            echo "Bismillah . . . $fav" && sh custom3.sh  
        # scrape -> build hugo -> costume domain -> netlify
            ;;
        "Clear all data")
            echo "Bismillah , $fav." && sh clean.sh  
        # optionally call a function or run some code here
        break
            ;;
    "Quit")
        echo "User requested exit"
        exit
        ;;
        *) echo "invalid option $REPLY";;
    esac
done