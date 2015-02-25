<?php include "../../../functions.php"; luwrain_begin_page('/doc/new-app/example/index.php', luwrain_current_lang() == 'ru'?'Пример простейшего приложения':'Application example');?>
<?php if (luwrain_current_lang() == 'en') {?>
                <h1>&#x22;Hello, world!&#x22; example</h1>

<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
                <h1>Пример простейшего приложения</h1>
                <p>
                  Ниже приведён исходный текст простейшего приложения для&#160;Luwrain. После компиляции
                  программа должна показывать одну область с&#160;надписью &#x22;Hello, world!&#x22; и проговаривать
                  эту&#160;фразу при&#160;любом нажатии клавиши до&#160;своего закрытия. Исходный файл доступен
                  по&#160;прямой ссылки <a href="http://download.luwrain.org/examples/HelloWorld.java">здесь</a>.
                  Для&#160;компиляции необходимо вызвать команду &#x22;<i>javac -classpath luwrain.jar HelloWorld.java</i>&#x22;.
                  При&#160;вызове этой команды необходимо подставить правильный путь к&#160;файлу luwrain.jar.
                </p>
<pre>
import org.luwrain.core.Luwrain;
import org.luwrain.core.Application;
import org.luwrain.core.Area;
import org.luwrain.core.AreaLayout;
import org.luwrain.core.events.KeyboardEvent;
import org.luwrain.core.events.EnvironmentEvent;

class HelloWorld implements Application
{
			    private Luwrain luwrain;
    private Area area;

    @Override public boolean onLaunch(Luwrain luwrain)
    {
	this.luwrain = luwrain;
	final Luwrain l = luwrain;
	area = new Area(){
		private Luwrain luwrain = l;
		@Override public int getLineCount()
		{
		    return 1;
		}
		@Override public String getLine(int index)
		{
		    return index == 0?"Hello, world!":"";
		}
		@Override public boolean onKeyboardEvent(KeyboardEvent event)
		{
		    return true;
		}
		@Override public boolean onEnvironmentEvent(EnvironmentEvent event)
		{
		    if (event.getCode() == EnvironmentEvent.CLOSE)
		    {
			luwrain.closeApp();
			return true;
		    }
		    return false;
		}
		@Override public int getHotPointX()
		{
		    return 0;
		}
		@Override public int getHotPointY()
		{
		    return 0;
		}
		@Override public String getName()
		{
		    return "Demonstration";
		}
	    };
	return true;
    }

    @Override public AreaLayout getAreasToShow()
    {
	return new AreaLayout(area);
    }
}
</pre>
<?php }?>
<?php luwrain_end_page('/doc/new-app/example/index.php');?>
