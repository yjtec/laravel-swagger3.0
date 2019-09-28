<?php 
/**
 * @OA\OpenApi(
 *     @OA\Info(
 *         title="laravel-swagger文档", 
 *         version="0.1"
 *     ),
 *     @OA\Server(
 *         description="OpenApi host",
 *         url="/api"
 *     )
 * )
 */
/**
 * @OA\SecurityScheme(
 *    type="apiKey",
 *    in="header",
 *    securityScheme="token",
 *    name="token"
 *)
 */
/**
 * @OA\Tag(
 *     name="Test",
 *     description="测试tag",
 * )
 */

/**
 *  @OA\Schema(
 *      schema="Error",
 *      @OA\Property(property="errcode",type="integer",format="int32"),
 *      @OA\Property(property="essmg",type="string")
 *  )
 */
/**
 * @OA\Schema(
 *      schema="Success",
 *      @OA\Property(property="errcode",type="integer",format="int32"),
 *      @OA\Property(property="errmsg",type="string")
 *  )
 */
/**
 *  @OA\Schema(
 *      schema="Page",
 *      @OA\Property(property="current_page",type="integer",format="int32",description="当前页"),
 *      @OA\Property(property="first_page_url",type="string",description="首页url"),
 *      @OA\Property(property="last_page_url",type="string",description="最后url"),
 *      @OA\Property(property="next_page_url",type="string",description="下一页地址"),
 *      @OA\Property(property="prev_page_url",type="string",description="上一页地址"),
 *      @OA\Property(property="path",type="string",description="url"),
 *      @OA\Property(property="from",type="integer",description="从哪个过来的"),
 *      @OA\Property(property="to",type="integer",description="下一页"),
 *      @OA\Property(property="total",type="integer",description="总记录数"),
 *      @OA\Property(property="last_page",type="integer",description="最后一页"),
 *      @OA\Property(property="per_page",type="integer",format="int32",description="条数")
 *  )
 */
/**
 * @OA\Parameter(
 *   parameter="page",
 *   name="page",
 *   description="当前页数",
 *   @OA\Schema(type="integer",format="int64"),
 *   in="query",
 *   example="1"
 * )
 * @OA\Parameter(
 *   parameter="pageSize",
 *   name="pageSize",
 *   description="每页条数",
 *   @OA\Schema(type="integer",format="int64"),
 *   in="query",
 *   example="10"
 * )
 *  @OA\Parameter(
 *    description="ID",
 *    in="path",
 *    name="id",
 *    required=true,
 *    @OA\Schema(
 *       format="int64",
 *       type="integer"
 *   )
 *  )
 */
/**
 * @OA\Get(
 *     path="/demo",
 *     summary="demo",
 *     @OA\Response(
 *         response=200,
 *         description="OK"
 *     )
 * )
 */
?>