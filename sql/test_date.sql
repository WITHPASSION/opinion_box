INSERT INTO questions
(question_name , question_content , question_status)
VALUES
('テスト' , 'テストのため' , '1'),
('テスト2' , 'test' , '1' ),
('hoge' , 'hogehoge' , '1' );


INSERT INTO choices
(question_id , choice_number , choice)
VALUES
('1' , '1' , 'テスト1'),
('1' , '2' , 'テスト2'),
('1' , '3' , 'テスト3'),
('1' , '4' , 'テスト4'),
('2' , '1' , 'テスト1'),
('2' , '2' , 'テスト2'),
('2' , '3' , 'テスト3'),
('2' , '4' , 'テスト4'),
('3' , '1' , 'テスト1'),
('3' , '2' , 'テスト2'),
('3' , '3' , 'テスト3'),
('3' , '4' , 'テスト4');

INSERT INTO answers
(question_id , choice_id)
VALUES
('1' , '2'),
('2' , '1'),
('3' , '2');
