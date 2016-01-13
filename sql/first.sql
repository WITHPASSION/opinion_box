CREATE DATABASE opinion_box;

use opinion_box;

---質問テーブル---
CREATE TABLE questions (
id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT'アンケートID',
question_name vachar(30) NOT NULL COMMENT 'アンケート名'
question_content varchar(50) NOT NULL COMMENT 'アンケート内容'
choice1 text NOT NULL COMMENT 'アンケート選択肢1'
choice2 text NOT NULL COMMENT 'アンケート選択肢2'
choice3 text NOT NULL COMMENT 'アンケート選択肢3'
choice4 text NOT NULL COMMENT 'アンケート選択肢4'
quetion_status INTEGER NOTNULL DEFAULT 0 COMMENT 'アンケート属性(0:投票中 1:集計)'
);

---回答テーブル---
CREATE TABLE answer (
id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT 
answer_choice INTEGER NOT NULL COMMENT '回答' 
);




