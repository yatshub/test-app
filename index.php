use Psr\Http\Message\ServerRequestInterface;

function hello_world(ServerRequestInterface $request)
{
    $data = json_decode($request->getBody(), true);
    if (is_null($data)) {
        return 'Hello World!NOO';
    }

    if (!array_key_exists('message', $data)) {
        return 'Hello World!NOOO';
    }

    return $data['message'];
}
