# Клонирование репозитория itStd

1. Открыть коммандную строку 

2. Внутри коммандной строки пишем:
```
 dir
 ```
3. далее нажимаем enter (на клавиатуре)

4. Далее пишем 
```
    mkdir Git + enter 

    Для проверки пишем dir + ищем папку Git 
```
6. Далее 
```
    cd Git 
    git clone https://github.com/DenVuy/itStd.git
    dir 
    cd itStd
    dir
```

> #### //dir - комманда для проверки содержимого папки, просто выводит в консоль что в папке


7. Начало проврки соединения (однократная)  

```
    git status
    git pull
    git push  //Возможно потребуется авторизация через браузер
```

8. Далее открываем VS code  
9. Открыть папку - Git/itStd   
   - или это можно сделать написать в консоли ``` code Git/itStd ```  
10. Открыть любую папку 
11. Открыть любой файл
12. Написать любой текст
13. Ctrl + S 
14. Вернуться в cmd 
```
    git status 
    git add . 
    git commit -m "Test connection <свое имя>"
    git push
```


15. Создание своей ветки 

```
    git checkout -b ___Твое_имя_ENG___
    git branch -a

    git switch master
    git switch ___Твое_имя_ENG___
```

16. Открыть VS Code 
17. Снова поменять любой файл 
18. Ctrl + S 
19. Открыть cmd 
```
    git status 
    git add . 
    git commit -m "New branch Test"
    git push --set-upstream origin ___Твое_имя_ENG___
```

20. Далее сообщить в общем чате что ты создал новую (свою личную) ветку 
21. И написать название ветки 
