<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //쿼리 빌더
        // select
        // $result = DB::select('select * from categories');
        // $no = '5';
        // $result = DB::select(
        //     'select * from categories where no = :no'
        //     ,[':no' => $no]
        // );
        // $result = DB::select(
        //     'select * from categories where no = ? and name = ?'
        //     ,[$no,'asd']
        // );
        // $input =['4','7','8']; //categories의 no 컬럼
        // // 게시글 번호, 게시글 제목, 카테고리명을 출력(게시글 번호로 오름차순 정렬 후 상위 5개만)
        // $result = DB::select(
        //         'SELECT bo.bno, bo.btitle, cate.name FROM boards bo, categories cate
        //          where cate.no = bo.category and cate.no in(?,?,?)
        //          order by bo.bno
        //          limit 5',$input
        //          );
        // $result = DB::insert(
        //     'insert into boards(
        //         category
        //         ,btitle
        //         ,bcontent
        //         ,created_at
        //         ,updated_at
        //     )values(
        //        :category
        //        ,:btitle
        //        ,:bcontent
        //        ,:created_at
        //        ,:updated_at
        //     )',['category' => '5'
        //         ,'btitle' => '테스트제목'    
        //         ,'bcontent' => '테스트내용'
        //         ,'created_at' => now()
        //         ,'updated_at' => now()
        //     ]
        // );
        // 방금 등록한 게시글의 제목 : test, 내용 : testTest 변경
        // $result = DB::update(
        //     'update boards
        //     set btitle =:title, bcontent = :content
        //     where bno = :no',
        //     ['title' => '오재훈꼰대'
        //     ,'content' => '오재훈은꼰대다'
        //     ,'no' => 80003
        //     ]
        // );
        // delete
        // $result = DB::delete('delete from boards where bno in(?,?)',[80006,80005]);

        // --------------- 
        // 쿼리 빌더 체이닝
        // ---------------
        $no = '5';
        // $result = DB::table('categories')->where('no','=',$no)->dd();
        // $result = DB::table('categories')->where('no','=',$no)->get();

        // select * from categories where no = ? or no = ?
        // $result = DB::table('categories')->where('no',$no)->orWhere('no','8')->get();

        // select * from categories where no = ? and no = ?
        // $result = DB::table('categories')->where('no',$no)->where('no','8')->get();
        // select * from categories where no in(?,?)
        // $result = DB::table('categories')->whereIn('no',[$no,'6'])->get();

        // select * from categories where no not in(?,?)
        // $result = DB::table('categories')->whereNotIn('no',[$no,'6'])->dd();

        // select id,no,name from categories
        // $result = DB::table('categories')->select('id','no','name')->dd();
        
        // select id,no,name from categories order by name desc
        // $result = DB::table('categories')->select('id','no','name')->orderBy('name','desc')->dd();

        // ********** 주의해서 사용(사용 안하는 걸 추천) ***********
        // $result = DB::table('categories')->whereRaw('no = '.$no);

        // first() : limit 1과 비슷한 작동, 실패시 false 리턴;
        // 한건만 출력
        // $result = DB::table('boards')->orderBy('bno','desc')->first();

        // firstOrFail() : first() 같은 동작을 하는데, 실패 시 결과가 예외 발생(엘로퀀트(laravel의 orm) 모델 객체에서만 사용 가능)
        
        // 집계 메소드
        // $result = DB::table('boards')->count(); //결과의 레코드수를 반환
        // $result = DB::table('boards')->min('bno'); // 해당 컬럼의 최소치 반환

        // DB::beginTransaction(); // 트랜잭션 시작
        // DB::rollback(); // 롤백
        // DB::commit(); // 커밋

        // 카테고리가 활성화 되어 있는 게시글의 카테고리별 갯수를 출력해 주세요
        // 카테고리 번호, 카테고리명, 갯수
        $result = DB::table('categories')
        ->select('boards.category','categories.name',DB::raw('COUNT(boards.bno) as cnt'))
        ->join('boards','boards.category','=','categories.no')
        ->where('active_flg','1')
        ->groupBy('boards.category','categories.name')
        ->get();

        return var_dump($result);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
