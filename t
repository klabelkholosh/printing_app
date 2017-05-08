for file in ` find .`
do
if [ ! -d $file ]
then 
	if grep -y 'Matirial' $file
	then echo $file
	fi
fi
done
