CREATE DATABASE opinion_box;

use opinion_box;

-- 質問テーブル --
CREATE TABLE questions (
id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
question_name varchar(30) NOT NULL COMMENT 'アンケート名',
question_content text NOT NULL COMMENT 'アンケート内容',	
quetion_status INTEGER NOT NULL DEFAULT 0 COMMENT 'アンケート属性(0:投票中 1:集計)'
);

-- 選択肢テーブル --
CREATE TABLE choices (
id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
question_id INTEGER NOT NULL COMMENT 'アンケートID',
choice_number INTEGER NOT NULL COMMENT '選択肢番号',
choice varchar(30) NOT NULL COMMENT '選択肢',
UNIQUE(question_id,choice_number)
);

-- 回答テーブル --
CREATE TABLE answers (
id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
question_id INTEGER NOT NULL COMMENT'アンケートID',
choice_id INTEGER NOT NULL COMMENT '回答'
);




