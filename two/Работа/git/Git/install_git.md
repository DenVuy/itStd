# Установка Git на Windows 

## Что такое Git 

> #### Можно почитать [тут](/two/Работа/git/Git/about.md)


<br></br>

### Инструкция
---
1. [Ссылка на скачивание](https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjpq_uN1vP6AhWNHuwKHXw3C7sQFnoECA4QAQ&url=https%3A%2F%2Fgit-scm.com%2Fdownload%2Fwin&usg=AOvVaw2-COXREi99EWhNd760ZDz_)

2. Установка
   - Нажать на установщик и следовать пунктам:

3. Если просят выбрать путь для установки, то устанавливайте в C:, чтобы в будущем для написания .bat файлов(Если мы будем это делать) не было проблем.

![image info](/two/Работа/git/Git/img/choise_path.png)

4. В этом пункте выбираем Use Visual Studio Code as Git's default editor

![image info](/two/Работа/git/Git/img/use_vscode.png)

5. Next...next...next... и так до конца Next

6. В конце Install 

7. Открыть коммандную строку  
```
    Win + R   
    Внутри пишем cmd 
    Нажать ОК
    
                  // Или в стркое поиска (Win + S) написать cmd
```

8. Для проверки написать: 
```
cd ..
git --help 

Если отображается много текста --> Значит все ОК

Далее: 

   git config --global user.name "__тут_пиши_свой_ник_в_GitHub__"
   git config --global user.email <_пиши_свою_почту_которую_ты_регистрировал_в_Git_>

```
![image info](/two/Работа/git/Git/img/cmd_view_example.png)

![image info](/two/Работа/git/Git/img/git_view.png)




