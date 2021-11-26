replace="sini"
find="ilovecamaro"
sed -i'.backup' "s+${find}+${replace}+g" adadata.sh ; sed -i'.backup' "s+${find}+${replace}+g" shuriken2.sh