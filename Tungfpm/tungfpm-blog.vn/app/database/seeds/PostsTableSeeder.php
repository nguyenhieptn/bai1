<?php

class PostsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('posts')->truncate();
        $content = 'Mười tám tuổi, tôi khoác ba lô, giã từ mẹ về thành phố học đại học. Sau tất cả những dặn dò chi li cẩn thận, lúc tiễn tôi ở cuối con đê đầu làng mẹ bỗng dưng bảo tôi: "Đường về nhà là con đường xa nhất, con giai ạ! Mai sau con có đi khắp chân trời góc biển thì cũng chẳng có con đường nào xa hơn đường về nhà mình đâu."
                    Tôi cười và không hiểu tại sao mẹ lại nói như thế với tôi. Trong lòng tôi chẳng bao giờ tin, đường về nhà lại là đường xa nhất. Từ Hà Nội về nhà tôi chưa đến 50 km. Mẹ sai rồi!
                    Những năm đầu tôi năng về nhà thăm cha mẹ người thân, và cũng để ngấm ngầm nói về mẹ, đường về nhà là đường gần nhất đấy.
                    Nhưng những lần về đó cứ thưa dần, thưa dần như những điều may mắn tốt đẹp hay hạnh phúc của đời một con người. <br/> <br/>
                    Tôi ra trường, ở lại Hà Nội, lăn xả vào đời, chiến đấu như một con ngựa dũng mãnh những mong tìm được một chỗ đứng trong cát bụi phồn hoa.
                    Đi qua quá nửa đời người, dấu chân phiêu lãng in mòn khắp nơi, năm châu bốn biển, tôi mới chợt nhận ra rằng, đường về nhà là con đường xa nhất. Mẹ hoàn toàn có lý!
                    Khi ấy tôi mới giật mình nhớ lại và suy nghĩ. Quê hương tôi bao người trùng trùng lớp lớp đã ra đi mà có thấy ai trở lại bao giờ. Không phải bởi quê hương tôi nghèo khó hay đời sống tinh thần từ túng như bao làng quê khác. Họ chỉ quay đầu khi mắt nhắm tay buông, thân xác hòa tan trong lòng đất mẹ.
                    Có hàng trăm ngàn vạn lý do chính đáng và không chính đáng để bước chân người ra đi không thể quay trở về được nữa, dù trong trái tim vẫn đau đáu một hình bóng quê nhà. Dù đường về quê chỉ là những con số toán học chẳng có nghĩa lý gì!
                    Ngay cả với tôi bây giờ, khi gối mỏi chân chồn, tan nát từng ước mơ, vẫn không thể (không muốn thì đúng hơn) trở về mái nhà xưa được nữa.
                    Bởi đường về nhà là con đường xa nhất trong những chuỗi hành trình vô tận miên man của một đời người ngắn ngủi mà lắm gian nan!';

        for($i =1; $i <= 20; $i++){
            $post = new Post;
                $post->title = "ĐƯỜNG VỀ NHÀ $i";
                $post->slug = "duong-ve-nha-$i";
                $post->draft = '0';
                $post->body = $content;
                $post->save();
        }


		// Uncomment the below to run the seeder
		// DB::table('posts')->insert($posts);
	}

}
