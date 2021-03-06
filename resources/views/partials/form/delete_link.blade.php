@php
$page = explode('/', $url)[1];
$text = $text ? $text : $page;
@endphp

{!! Form::open([
    'id' => str_singular($page) . '-' . $item->$id,
    'method' => 'DELETE',
    'url' => [$url, $item->$id],
    'style' => 'display:inline'
]) !!}
{!! Form::button(trans('general.delete'), array(
    'type'    => 'button',
    'class'   => 'delete-link',
    'title'   => trans('general.delete'),
    'onclick' => 'confirmDelete("' . '#' . str_singular($page) . '-' . $item->$id . '", "' . trans_choice('general.' . $text, 2) . '", "' . trans('general.delete_confirm', ['name' => '<strong>' . $item->$value . '</strong>', 'type' => strtolower(trans_choice('general.' . $text, 1))]) . '", "' . trans('general.cancel') . '", "' . trans('general.delete') . '")'
)) !!}
{!! Form::close() !!}
