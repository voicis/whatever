<?php
/** 
*
* WP-United [Russian]
*
* @package WP-United
* @version $Id: 0.9.1.5 2013/01/22 Kot-Someone (~kotsemen) Exp $
* @copyright (c) 2006-2013 wp-united.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License  
* @license translation strings licensed under the BSD license
*
*/

// This program is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
// General Public License for more details.
// 
// You should have received a copy of the GNU General Public License
// along with this program; if not, write to the Free Software
// Foundation, Inc., 51 Franklin Street - Fifth Floor, Boston, MA  02110-1301, USA.
//

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(

	'BLOG' 							=>	'Блог WordPress',
	'VISIT_BLOG'					=>	'Посетить блог пользователя?',
	'Function_Duplicate' 			=>	'<strong>ОШИБКА</strong>: Дублирование имен функций обнаружено. Посетите Www.wp-united.com и сообщите об ошибке.',
	'WPU_Credit' 					=>	'phpBB интеграция от <a href="http://www.wp-united.com/">WP-United</a>.',

));

?>