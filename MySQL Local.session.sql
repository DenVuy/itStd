CREATE TABLE Пациент
(
    Номер_карточки INTEGER PRIMARY KEY,
    Фамилия CHAR(50),
    Имя CHAR(50),
    Отчество CHAR(50),
    Адрес CHAR(50),
    ГодРождения DATE
);

CREATE TABLE Приём
(
    Номер_приема INTEGER PRIMARY KEY,
    Дата DATE,
    Номер_кабинета INTEGER,
    Номер_карточки INTEGER REFERENCES Пациент(Номер_карточки),
    Фамилия_врача CHAR(50),
    Диагноз CHAR(100)
);