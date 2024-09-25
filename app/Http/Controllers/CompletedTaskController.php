<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CompletedTask as CompletedTaskModel;

class CompletedTaskController extends Controller
{
    public function list()
    {
        // 一覧の取得
        $list = $this->getListBuilder()
                     ->paginate();

        // 完了したタスクをDBから取得
        $completedTasks = CompletedTaskModel::paginate();

        // テンプレートに渡して表示
        return view('task.completed_list', ['tasks' => $completedTasks , 'list' => $list]);
    }

     /**
     * 一覧用の Illuminate\Database\Eloquent\Builder インスタンスの取得
     */
    protected function getListBuilder()
    {
        return CompletedTaskModel::where('user_id', Auth::id())
                     ->orderBy('priority', 'DESC')
                     ->orderBy('period')
                     ->orderBy('created_at');
    }
}
