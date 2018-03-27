mkdir dist

cd dist

del /S /Q *

cd ..

zip -r dist/com_exampleuser.zip com_exampleuser
zip -r dist/com_selectuser.zip com_selectuser
