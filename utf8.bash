#!bin/bash 

for x in `find . -name '*.css' -or -name '*.html' -or -name '*.php' -or -name '*.js' ! -name 'node.js'`
do
	iconv -f ISO-8859-1 -t UTF-8 $x > "$x.utf8"
	rm $x
	mv "$x.utf8" $x
done
