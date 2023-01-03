function clicksign()
{
    document.getElementById('sign').style.display= 'block';
}
function clickclose()
{
    document.getElementById('signin_contain').style.display= 'block';
    document.getElementById('signup_contain').style.display= 'none';
    document.getElementById('sign').style.display= 'none';
}
function clicksignup()
{
    document.getElementById('signin_contain').style.display= 'none';
    document.getElementById('signup_contain').style.display= 'block';
} 
function checkpw()
{
    var a = document.getElementById("passwordsu").value;
    var length = a.length;
    if (length == 0)
    {
        document.getElementById("checkdodai").style.color = 'red';
        document.getElementById("checkchuhoa").style.color = 'red';
        document.getElementById("checkchuso").style.color = 'red';
    }
    if (length >= 8)
    {
        document.getElementById("checkdodai").style.color = 'green';
    }
    var i = 0;
    for (i; i < length; i++)
    {
        if (!isNaN(a[i]))
        {
            document.getElementById("checkchuso").style.color = 'green';
        }
        else if (a[i] == a[i].toUpperCase() && isNaN(a[i]))
        {
            document.getElementById("checkchuhoa").style.color = 'green';
        }
    }
}
function checkpw2()
{
    var pw = document.getElementById("passwordsu").value;
    var pw2 = document.getElementById("passwordsu2").value;
    if (pw2.length == 0)
    {
        document.getElementById('resultcheck').innerText = '';
        document.getElementById('passwordsu2').style.borderBottomColor = 'red';
    }
    else if (pw != pw2)
    {
        document.getElementById('resultcheck').innerText = 'Mật khẩu không khớp';
        document.getElementById('resultcheck').style.color = 'red';
        document.getElementById('passwordsu2').style.borderBottomColor = 'red';
    }
    else
    {
        document.getElementById('resultcheck').innerText = '';
        document.getElementById('passwordsu2').style.borderBottomColor = 'green';
    }
}