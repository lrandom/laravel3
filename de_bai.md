2, Hãy viết một chương trình trắc nghiệm với CSDL như sau sections(id,name) -> lưu trữ bộ câu hỏi questions(
id,question,index_correct_answer, answers,section_id) -> lưu trữ câu hỏi

Yêu cầu, mỗi bộ câu hỏi có 10 câu, mỗi câu sẽ có 4 đáp án ABCD, mỗi câu trả lời đúng được 10 điểm và đi tiếp, trả lời
sai đưa ra thông báo dừng lại và đưa ra số điểm của người dùng.

Lưu ý: cột answers sẽ lưu trữ dưới dạng JSON khi lấy ra sẽ convert thành một mảng như sau

[
“A.Trả lời A”, “B.Trả lời B”, “C.Trả lời C”, “D.Trả lời D”
]

Xây dựng cả module backend(CRUD) và frontend cho chương trình trên 
