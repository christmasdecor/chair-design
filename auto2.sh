find="sini"
replace="chevycamaro"
sed -i'.backup' "s+${find}+${replace}+g" auto.sh ; sed -i'.backup' "s+${find}+${replace}+g" shuriken2.sh