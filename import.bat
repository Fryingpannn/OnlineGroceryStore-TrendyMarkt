@echo off
heroku config | findstr CLEARDB > config.txt
set /p url=<config.txt

set "string=%url:?=" & set "x=%"
set "x=%string:/=" & set "dbname=%"
echo DB name: 	%dbname%
echo DB name: 	%dbname% >> config.txt

set "x=%string:@=" & set "substring=%"
set "host=%substring:/=" & set "x=%"
echo Host: 		%host%
echo Host: 		%host% >> config.txt

set "x=%string::=" & set "substring=%"
set "password=%substring:@=" & set "x=%"
echo Password: 	%password%
echo Password: 	%password% >> config.txt

set "x=%string:://=" & set "substring=%"
set "user=%substring::=" & set "x=%"
echo User: 		%user%
echo User: 		%user% >> config.txt

mysql -u %user% -p%password% -h %host% -D %dbname%  < %1