# bing
bing online wallpaper
必应壁纸

获取数据
http://www.bing.com/HPImageArchive.aspx?format=js&idx=0&n=1

请求参数说明:
format:数据格式,非必要条件,可选json和xml;format=js获取到json格式,当不存在时或format=xml时就打印xml格式.
idx:日期,非必要条件,当为0或不存在是输出当天数据,1为昨天,2为前天...最大为16(但是有时候可以获取到20，有变动的,获取多条时最好写16);-1为明天.
n:打印的数据条目,必要条件,1表示打印一条,最大为8.
idx和n结合可以打印出多条数据.
还有其他非必要参数，比如地区选择，语言等，（地区是根据IP判断了,加了也没用）


