
public class CheckLoadDBC {

	public static void main(String[] args)throws
	InstantiationException,IllegalAccessException{
		// TODO 自動生成されたメソッド・スタブ
		String msg="";

		try{
		Class.forName("com.mysql.jdbc.Driver").newInstance();
			msg="ドライバーロードに成功しました。";
		}catch(ClassNotFoundException e){
			msg="ドライバーロードに失敗しました。";
		}
		System.out.println(msg);
	}

}
